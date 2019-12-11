<footer class="footer">
    <div class="container-fluid">
        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route('about') }}" class="nav-link">
                    {{ __('Sobre') }}
                </a>
        </ul>
        <div class="copyright">
            &copy; {{ now()->year }} {{ __('feito com') }} <i class="tim-icons icon-heart-2"></i> {{ __('por') }}
            {{ __('Alan Queiroz') }} &amp;
            {{ __('Igor Neves') }} {{ __('para o Trabalho Final de Sistema Web') }}.
        </div>
    </div>
</footer>
