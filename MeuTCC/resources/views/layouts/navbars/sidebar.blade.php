<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-normal ">{{ __('Meu TCC') }}</a>
        </div>
        <ul class="nav">
            <li @if ($pageSlug ?? '' == 'dashboard') class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            
            @if(auth()->user()->tipo == 'Aluno')
                <li @if ($pageSlug ?? '' == 'dashboard') class="active " @endif>
                    <a href="{{ route('tcc') }}">
                        <i class="tim-icons icon-book-bookmark"></i>
                        <p>{{ __('Anuncios') }}</p>
                    </a>
                </li>
            @endif

            @if(auth()->user()->tipo == 'Professor')
                <li @if ($pageSlug ?? '' == 'dashboard') class="active " @endif>
                    <a href="{{ route('alunos') }}">
                        <i class="tim-icons icon-book-bookmark"></i>
                        <p>{{ __('Alunos') }}</p>
                    </a>
                </li>
            @else
            <li @if ($pageSlug ?? '' == 'users') class="active " @endif>
                <a href="{{ route('professores') }}">
                    <i class="tim-icons icon-bullet-list-67"></i>
                    <p>{{ __('Professores') }}</p>
                </a>
            </li>
            @endif
            <li>
                <a data-toggle="collapse" href="#laravel-examples3" aria-expanded="true">
                    <i class="tim-icons icon-single-02" ></i>
                    <span class="nav-link-text" >{{ __('Area de Trabalho') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples3">
                    <ul class="nav pl-4">
                            @if(auth()->user()->tipo == 'Professor')
                            <li class="active ">
                                <a href="{{ route('professor.ofertaTcc') }}">
                                    <i class="tim-icons icon-book-bookmark"></i>
                                    <p>{{ __('Ofertar TCC') }}</p>
                                </a>
                            </li>
                       @endif

                       @if(auth()->user()->tipo == 'Aluno')
                       <li class="active ">
                            <a href="{{ route('tcc.schedule.add') }}">
                                <i class="tim-icons icon-book-bookmark"></i>
                                <p>{{ __('Adicionar Informações') }}</p>
                            </a>
                        </li>
                       @endif

                        <li class="active ">
                            <a href="{{ route('tcc.schedule.show') }}">
                                <i class="tim-icons icon-pencil"></i>
                                <p>{{ __('Atualizar Trabalho') }}</p>
                            </a>
                        </li>

                        <li class="active ">
                            <a href="{{ route('tcc.schedule.view') }}">
                                <i class="tim-icons icon-pencil"></i>
                                <p>{{ __('Trabalhos em andamento') }}</p>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
          
           
{{--             
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="fab fa-laravel" ></i>
                    <span class="nav-link-text" >{{ __('Laravel Examples') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug ?? '' == 'profile') class="active " @endif>
                            <a href="{{ route('profile.edit')  }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ __('User Profile') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug ?? '' == 'users') class="active " @endif>
                            <a href="{{ route('user.index')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ __('User Management') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li @if ($pageSlug ?? '' == 'icons') class="active " @endif>
                <a href="{{ route('pages.icons') }}">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ __('Icons') }}</p>
                </a>
            </li>
            <li @if ($pageSlug ?? '' == 'maps') class="active " @endif>
                <a href="{{ route('pages.maps') }}">
                    <i class="tim-icons icon-pin"></i>
                    <p>{{ __('Maps') }}</p>
                </a>
            </li>
            <li @if ($pageSlug ?? '' == 'notifications') class="active " @endif>
                <a href="{{ route('pages.notifications') }}">
                    <i class="tim-icons icon-bell-55"></i>
                    <p>{{ __('Notifications') }}</p>
                </a>
            </li>
            <li @if ($pageSlug ?? '' == 'tables') class="active " @endif>
                <a href="{{ route('pages.tables') }}">
                    <i class="tim-icons icon-puzzle-10"></i>
                    <p>{{ __('Table List') }}</p>
                </a>
            </li>
            <li @if ($pageSlug ?? '' == 'typography') class="active " @endif>
                <a href="{{ route('pages.typography') }}">
                    <i class="tim-icons icon-align-center"></i>
                    <p>{{ __('Typography') }}</p>
                </a>
            </li>
            <li @if ($pageSlug ?? '' == 'rtl') class="active " @endif>
                <a href="{{ route('pages.rtl') }}">
                    <i class="tim-icons icon-world"></i>
                    <p>{{ __('RTL Support') }}</p>
                </a>
            </li>
            <li class=" {{ $pageSlug ?? '' == 'upgrade' ? 'active' : '' }}">
                <a href="{{ route('pages.upgrade') }}">
                    <i class="tim-icons icon-spaceship"></i>
                    <p>{{ __('Upgrade to PRO') }}</p>
                </a>
            </li> --}}
        </ul>
    </div>
</div>
