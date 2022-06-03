<article class="a-popup card">
    <figure class="card__figure">
       <img class="card__image" src={{$pet->image}} alt="{{$pet->name . ' ' . $pet->kind}}"/>
    </figure>
    <section class="card__text">
        {{$pet->description}}
    </section>
    <section class="card__information">
        <section class="card__information--text">
        {{$pet->length}}  
        </section>
        <section class="card__information--text">
        {{$pet->wage}} 
        </section>
        <section class="card__information--text">
        {{$pet->when}}
        </section>
    </section>
    <section class="card__information">
        <section class="card__information--text">
        {{$pet->user}}
        </section>
    </section>
    <section class="card__btnSection">
        <input class="card__button" type="button" id="button" value ="Apply now!" onclick=" change();setColor('button', '#101010')";/>
        <button onclick="window.location.href='/pet/{{$pet->id}}/review';" class="card__button"> Watch reviews! </button>
        <a class="card__back_to_home" href="/pet"> Back to pets </a>
    </section>
 </article>