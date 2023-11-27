<div class="page-sidebar sidebar">
    <div class="page-sidebar-inner slimscroll">
        <ul class="menu accordion-menu">
            <li class ="{{ Request::is('home') ? 'active open' : '' }}"><a href="{{ route('home') }}"
                    class="waves-effect waves-button"><span class="menu-icon icon-home"></span>
                    <p>Home</p>
                </a>
            </li>
            <li class ="{{ Request::is('databarang*') ? 'active open' : '' }}"><a href="{{ route('databarang.index') }}"
                    class="waves-effect waves-button"><span class= "icon-folder-alt"></span>
                    &nbsp; <p>Data Barang</p>
                </a>
            </li>
            {{-- @if (auth()->user()->is_admin == 1) --}}

            @php
                if (auth()->user()->id == 1) {
                    $pendingRequestCount = App\Models\Peminjaman::where('status', 'menunggu')->count();
                } else {
                    $pendingRequestCount = App\Models\Peminjaman::where('id_pic', auth()->user()->id)
                        ->where('status', 'menunggu')
                        ->count();
                }
            @endphp

            @if (auth()->user()->is_admin === 'admin' || auth()->user()->is_admin === 'pic')
                <li class ="{{ Request::is('peminjam*') ? 'active open' : '' }}"><a href="{{ route('peminjam.index') }}"
                        class="waves-effect waves-button"><span class="icon-briefcase"></span>

                        &nbsp;<p>Peminjaman</p>
                        @if ($pendingRequestCount > 0)
                            <span class="badge badge-danger pull-right">{{ $pendingRequestCount }}</span>
                    </a>
            @endif
            </a>
            </li>
            @endif

            {{-- @if (isset($pendingRequestCount) && (auth()->user()->is_admin == 'admin' || auth()->user()->is_admin == 'pic'))
                <li class="{{ Request::is('peminjam*') ? 'active open' : '' }}">
                    <a href="{{ route('peminjam.index') }}" class="waves-effect waves-button">
                        <span class="icon-briefcase"></span>
                        <p>Peminjaman</p>
                        @if ($pendingRequestCount > 0)
                            <span class="badge badge-danger pull-right">{{ $pendingRequestCount }}</span>
                        @endif
                    </a>
                </li>
            @endif --}}



            {{-- @if (auth()->user()->is_admin == 1) --}}
            @if (auth()->user()->is_admin === 'admin')
                <li class="{{ Request::is('user*') ? 'active open' : '' }}"><a href="{{ route('user.index') }}"
                        class="waves-effect waves-button"><span class="menu-icon icon-user"></span>
                        <p>User</p>
                    </a>
                </li>
            @endif

            <li class="{{ Request::is('pinjam*') ? 'active open' : '' }}"><a href="{{ route('pinjam.create') }}"
                    class="waves-effect waves-button"><span class="icon-grid"></span> &nbsp;
                    <p>Pinjam</p>
                </a>
            </li>
            {{-- @if (auth()->user()->is_admin == 1) --}}
            @if (auth()->user()->is_admin === 'admin')
                <li class="{{ Request::is('jenisBarang*') ? 'active open' : '' }}"><a
                        href="{{ route('jenisBarang.index') }}" class="waves-effect waves-button"><span
                            class="icon-fire"></span> &nbsp;
                        <p>Jenis Barang</p>
                    </a>
                </li>
            @endif
            @if (auth()->user()->is_admin === 'admin' || auth()->user()->is_admin === 'pic')
                <li class="{{ Request::is('pengembalian*') ? 'active open' : '' }}"><a
                        href="{{ route('pengembalian.index') }}" class="waves-effect waves-button"><span
                            class="icon-fire"></span> &nbsp;
                        <p>Pengembalian</p>
                    </a>
                </li>
            @endif
            {{-- @if (auth()->user()->is_admin === 'admin')
                <li class="{{ Request::is('stok*') ? 'active open' : '' }}"><a href="{{ route('stok.index') }}"
                        class="waves-effect waves-button"><span class="icon-briefcase"></span> &nbsp;
                        <p>Stok</p>
                    </a>
                </li>
            @endif --}}
            {{-- @if (auth()->user()->group_id == 1)
                <li class="{{ Request::is('group*') ? 'active open' : '' }}"><a href="{{ route('group.index') }}"
                        class="waves-effect waves-button"><span class="icon-grid"></span> &nbsp;
                        <p>Role Permission</p>
                    </a>
                </li>
            @endif --}}



            {{-- <li><a href="profile.html" class="waves-effect waves-button"><span
                        class="menu-icon icon-user"></span>
                    <p>Role</p>
                </a></li>
            </li> --}}

        </ul>
    </div><!-- Page Sidebar Inner -->
</div>
