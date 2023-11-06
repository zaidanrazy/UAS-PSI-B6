<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Group;
use App\Models\GroupPage;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->user()->group_id == 1) {
            return view('layout.group.index', [
                'groups' => Group::all(),
            ]);
        } else {
            return redirect('home')->with('failed', "You not Have Authority");
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (auth()->user()->group_id == 1) {
            return view('layout.group.create', [
                'page_distincts' => Page::distinct('page_name')->get('page_name'),
                'pages' => Page::all(),
            ]);
        } else {
            return redirect('home')->with('failed', "You not Have Authority");
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (auth()->user()->group_id == 1) {
            try {
                $validate = Validator::make($request->all(), [
                    'group_name' => 'required',
                ]);

                if (!$validate->fails()) {
                    $group = new Group();
                    $group->group_name = str_replace('_', ' ', $request->group_name);
                    $group->save();
                    $pages = Page::all();
                    foreach ($pages as $page) {
                        $groupPage = new GroupPage();
                        $groupPage->page_id = $page->page_id;
                        $groupPage->group_id = $group->group_id;
                        $groupPage->access = $request->input($page->page_id) == 'on' ? 1 : 0;
                        $groupPage->save();
                    }

                    return redirect('group')->with('success', 'Added Role Successfully!');
                }

                return redirect()->back()->with('failed', $validate->getMessageBag())->withInput();
            } catch (QueryException $e) {
                return redirect('group')->with('failed', $e->getMessage());
            }
        } else {
            return redirect('home')->with('failed', "You not Have Authority");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group $group)
    {
        if (auth()->user()->group_id == 1) {
            return view('layout.group.edit', [
                'group' => $group,
                'page_distincts' => Page::distinct('page_name')->get('page_name'),
                'pages' => GroupPage::leftJoin('pages', 'pages.page_id', '=', 'group_pages.page_id')->where('group_id', '=', $group->group_id)->get(),
            ]);
        } else {
            return redirect('home')->with('failed', "You not Have Authority");
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Group $group, Page $page, GroupPage $groupPage)
    {
        if (auth()->user()->group_id == 1) {
            try {
                // validasi group name
                $validate = Validator::make($request->all(), [
                    'group_name' => 'required',
                ]);

                if (!$validate->fails()) {
                    // Update group name
                    Group::where('group_id', $group->group_id)->update(['group_name' => $request->input('group_name')]);

                    // Update group page access
                    $pages = Page::all();
                    foreach ($pages as $page) {
                        $groupPage->where('group_id', $group->group_id)
                            ->where('page_id', $page->page_id)
                            ->update(['access' => $request->input($page->page_id) == 'on' ? 1 : 0]);
                    }

                    return redirect('group')->with('success', 'Updated Role Successfully!');
                }

                return redirect()->back()->with('failed', $validate->getMessageBag())->withInput();
            } catch (QueryException $e) {
                return redirect('group')->with('failed', $e->getMessage());
            }
        } else {
            return redirect('home')->with('failed', "You not Have Authority");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group)
    {
        if (auth()->user()->group_id == 1) {
            Group::where('group_id', $group->group_id)->delete();

            $pages = Page::all();
            foreach ($pages as $page) {
                $groupPage = GroupPage::where([
                    'group_id' => $group->group_id,
                    'page_id' => $page->page_id,
                ])->first();
                if ($groupPage) {
                    $groupPage->delete();
                }
            }

            return redirect('group')->with('success', 'Deleted Roles Successfully!');
        } else {
            return redirect('home')->with('failed', "You not Have Authority");
        }
    }
}
