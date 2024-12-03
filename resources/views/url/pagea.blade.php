<div>
    <h1>Hi  Iam Page A</h1>
    <h4>Current Url: {{URL::current()}}</h4>
    <h4>Current Url: {{url()->current()}}</h4>
    <h4>Full Url: {{URL::full()}}</h4>
    <h4>Full Url: {{url()->full()}}</h4>
    <!-- <a href="{{URL::to('/page/b')}}">PAGE B</a>
    <a href="{{URL::to('/page/c')}}">PAGE C</a> -->
    <a href="{{route('page_b')}}">PAGE B</a>
    <a href="{{route('page_c')}}">PAGE C</a>
</div>
