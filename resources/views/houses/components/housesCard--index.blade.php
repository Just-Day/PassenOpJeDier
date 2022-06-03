<li class="a-popup u-list-style-none gridCard" data-kind-of-house={{$house->kind}}>
    <a href="/house/{{$house->id}}">
        <article class="">
            <header class="gridCard__header u-flex-v-center">
                <h2 class="gridCard__heading"> {{$house->kind}} {{$house->name}} </h2>
            </header>
            <figure class="gridCard__figure">
                <img class="gridCard__image" src={{$house->image}} alt="{{$house->name . ' ' . $house->kind}}"/>
            </figure>
            <section class="gridCard__textSection u-flex-v-center">
                <p class="gridCard__text"> {{$house->description}} </p>
            </section>
        </article>
    </a>
</li>