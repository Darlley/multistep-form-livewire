<main class="main">
    <div>
        <form action="">
            @csrf
            <div class="form-group">

            @if($currentPage === 1)
                @include('components.step1')
            @elseif($currentPage === 2)
                @include('components.step2')
            @endif

            <p>{{ var_dump($currentPage) }}</p>

            </div>
        </form>
    </div>
</main>
<h1>{{$name}}</h1>