<div class="d-flex flex-column h-100">
    <div class="p-3">
        <ul class="list-unstyled d-flex flex-column justify-content-between h-100">
            @foreach ($categories as $category)
                <li class="text-center border rounded mb-2"> <!-- Added border and rounded corners -->
                    <a href="#" class="text-decoration-none text-dark d-block py-2 hover-bg-light"> <!-- Added hover effect -->
                        {{ $category->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
