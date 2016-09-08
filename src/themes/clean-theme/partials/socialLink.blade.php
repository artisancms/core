@foreach (cms('social') as $key => $social)
    <li>
        <a href="{{ URL::to($social) }}">
            <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-{{ $key }} fa-stack-1x fa-inverse"></i>
            </span>
        </a>
    </li>
@endforeach
