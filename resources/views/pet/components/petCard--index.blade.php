<li class="a-popup u-list-style-none gridCard" data-kind-of-pet={{$pet->kind}}>
    <a href="/pet/{{$pet->id}}">
        <article class="">
            <header class="gridCard__header u-flex-v-center">
                <h2 class="gridCard__heading"> {{$pet->kind}} {{$pet->name}} </h2>
            </header>
            <figure class="gridCard__figure">
                <img class="gridCard__image" src={{$pet->image}} alt="{{$pet->name . ' ' . $pet->kind}}"/>
            </figure>
            <section class="gridCard__textSection u-flex-v-center">
                <p class="gridCard__text"> {{$pet->description}} </p>
            </section>
        </article>
    </a>
</li>