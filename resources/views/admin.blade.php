@forelse($names as $name)
<h1>Name: {{$name}}</h1>
@empty
    <h1>No record found</h1>
@endforelse