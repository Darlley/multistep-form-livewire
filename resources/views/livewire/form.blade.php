<main class="main">
    <div>
        <form action="">
            @csrf
            <div class="form-group">
                {{-- @switch()
                    @case()
                        
                        @break
                
                    @default
                        
                @endswitch --}}
                @if($currentPage == 1)
                    @include('components.step1')
                @endif
                @if($currentPage == 2)
                    @include('components.step2')
                @endif
            </div>
        </form>
    </div>
</main>
<h1>{{$name}}</h1>