<div>
<h1>Hi  Iam Page B</h1>
    <h4>Current Url: {{URL::current()}}</h4>
    <h4>Current Url: {{url()->current()}}</h4>
    <h4>Full Url: {{URL::full()}}</h4>
    <h4>Full Url: {{url()->full()}}</h4>
    <!-- <a href="{{URL::to('/page/a')}}">PAGE A</a><br>
    <a href="{{URL::to('/page/c/awdhesh')}}">PAGE C</a><br> -->
    <a href="{{route('page_a')}}">PAGE A</a><br>
    <a href="{{route('page_c_param',['name'=>'osho'])}}">PAGE C</a><br>
    <a href="{{URL::previous()}}">Previous</a><br>
</div>
