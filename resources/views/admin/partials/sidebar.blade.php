<div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Creative Tim
                </a>
                <?php $current_url =Request::path() ?>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="{{ $current_url == 'admin' ? 'active' : '' }}">
                        <a href="{{ route('dashboard') }}">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="{{ str_contains($current_url, 'reciters') ? 'active' : '' }}">
                        <a href="{{ route('reciters.index') }}">
                            <i class="material-icons">person</i>
                            <p>Reciters</p>
                        </a>
                    </li>
                    <li class="{{ str_contains($current_url, 'audios') ? 'active' : '' }}">
                        <a href="{{ route('audios.index') }}">
                            <i class="material-icons">content_paste</i>
                            <p>Audios</p>
                        </a>
                    </li>
                    
                    <li class="active-pro">
                        <a href="upgrade.html">
                            <i class="material-icons">unarchive</i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li>
                </ul>
            </div>
            
        </div>