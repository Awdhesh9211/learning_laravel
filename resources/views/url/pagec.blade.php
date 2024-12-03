<div>
<h1>Hi  Iam Page C</h1>
@if(@$name)
<h2>Welcome, {{$name}}</h2>
@endif
    <h4>Current Url: {{URL::current()}}</h4>
    <h4>Current Url: {{url()->current()}}</h4>
    <h4>Full Url: {{URL::full()}}</h4>
    <h4>Full Url: {{url()->full()}}</h4>
    <!-- <a href="{{URL::to('/page/a')}}">PAGE A</a><br>
    <a href="{{URL::to('/page/b')}}">PAGE B</a><br> -->
    <a href="{{route('page_a')}}">PAGE A</a><br>
    <a href="{{route('page_b')}}">PAGE B</a><br>
    <a href="{{URL::previous()}}">Previous</a><br>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
</div>
