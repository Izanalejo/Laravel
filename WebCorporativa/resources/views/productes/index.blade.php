<h1>Llista de productes</h1>



<ul>
    @foreach($productes as $producte)
        <li>
        {{ $producte->name }} - {{ $producte->price }} € (euros) - {{ $producte->description }}
        </li>
        @endforeach
    </li>
</ul>