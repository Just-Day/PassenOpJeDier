<article class="a-popup userCard">
    <section class="userCard__text">
        {{$users->name}}
    </section>
    <section class="userCard__information">
        <section class="userCard__information--text">
        {{$users->email}}  
        </section>
    </section>
    <form action="/users/{{$users->id}}" method="POST">
        @method('delete')
        @csrf
        <section class="userCard__btnSection">
            <input class="userCard__button" type="submit" value="Delete user"/>
            <a class="userCard__back_to_home" href="/users"> Back to users </a>
        </section>
    </form>
 </article>