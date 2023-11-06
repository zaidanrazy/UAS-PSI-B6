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
            <li class ="{{ Request::is('peminjam*') ? 'active open' : '' }}"><a href="{{ route('peminjam.index') }}"
                    class="waves-effect waves-button"><span class="icon-briefcase"></span>

                    &nbsp;<p>Peminjaman</p>
                </a>
            </li>
            @if (auth()->user()->is_admin == 1)
                <li class="{{ Request::is('user*') ? 'active open' : '' }}"><a href="{{ route('user.index') }}"
                        class="waves-effect waves-button"><span class="menu-icon icon-user"></span>
                        <p>User</p>
                    </a>
                </li>
            @endif
            <li class="{{ Request::is('pinjam*') ? 'active open' : '' }}"><a href="{{ route('pinjam.index') }}"
                    class="waves-effect waves-button"><span class="icon-grid"></span> &nbsp;
                    <p>Pinjam</p>
                </a>
            </li>

            <li class="{{ Request::is('jenisBarang*') ? 'active open' : '' }}"><a
                    href="{{ route('jenisBarang.index') }}" class="waves-effect waves-button"><span
                        class="icon-grid"></span> &nbsp;
                    <p>Jenis Barang</p>
                </a>
            </li>
            @if(auth()->user()->group_id == 1)
            <li class="{{ Request::is('group*') ? 'active open' : '' }}"><a
                    href="{{ route('group.index') }}" class="waves-effect waves-button"><span
                        class="icon-grid"></span> &nbsp;
                    <p>Role Permission</p>
                </a>
            </li>
            @endif



            {{-- <li><a href="profile.html" class="waves-effect waves-button"><span
                        class="menu-icon icon-user"></span>
                    <p>Role</p>
                </a></li>
            </li> --}}

        </ul>
    </div><!-- Page Sidebar Inner -->
</div>
