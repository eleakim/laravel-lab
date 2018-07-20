<!-- Menu -->
<div class="menu">
    <ul class="list">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
            <a href="{{ route('admin.home') }}">
                <i class="material-icons">home</i>
                <span>Home</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                <i class="material-icons">dashboard</i>
                <span>Posts</span>
            </a>

            <ul class="ml-menu">
                <li>
                    <a href="#">Todos os posts</a>
                </li>
                <li>
                    <a href="#">Adicionar novo</a>
                </li>
                <li>
                    <a href="#">Categorias</a>
                </li>
                <li>
                    <a href="{{ route('admin.tag.index') }}">Tags</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
<!-- #Menu -->