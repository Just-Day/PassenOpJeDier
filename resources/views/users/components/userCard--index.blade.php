<li class="a-popup u-list-style-none userGridCard">
    <a href="/users/{{$user->id}}">
        <article class="">
            <header class="userGridCard__header u-flex-v-center">
                <h2 class="userGridCard__heading">{{$user->name}} </h2>
            </header>
            <section class="userGridCard__textSection u-flex-v-center">
                <p class="userGridCard__text"> {{$user->email}} </p>
            </section>
        </article>
    </a>
</li>