<article class="a-popup card">
    <figure class="card__figure">
       <img class="card__image" src={{$houses->image}} alt="{{$houses->name . ' ' . $houses->kind}}"/>
    </figure>
    <section class="card__text">
        {{$houses->description}}
    </section>
    <section class="card__btnSection">
        <input class="card__button" type="button" id="button" value ="Apply now!" onclick=" change();setColor('button', '#101010')";/>
        <button onclick="window.location.href='/house/{{$houses->id}}/review';" class="card__button"> Watch reviews! </button>
        <a class="card__back_to_home" href="/house"> Back to houses </a>
    </section>
 </article>