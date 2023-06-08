@extends('layouts.pageslayout')
@section('title')
    {{ $post->title }}
@endsection

{{-- to arrange your code, you press shift+alt+f --}}

@section('content')
    <hr>
    <img class="card-img-top" src="{{ url('uploads/' . $post->image) }}" alt="news image">
    <br>
    <br>
    {{ $post->details }}

    <hr>
    @guest
        <a href="{{ route('login') }}">Login to comment</a>
    @endguest
    @auth
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="{{ route('create_comment') }}">
                    {{-- 
            HOW CAN YOU SUBMIT A COMMENT TO A VIEW!!!? 
            You have to think very carefully before you code something...
            Here you need to put action of an endpoint that will accept post,
            and receive the comment ..
            WHY I See dashboard link even when I am logged out??/??
            what dose that white page mean???
            login!!! has issues
            Can you fix login issues and take it from there????
            yes
            have your understood where you were making mistakes from?
            yes i hav seen it
            ok then.
            nice coding.
            thank you so much for the asistance 
            hehehehe... replace these words *so much for the asistance* with..
            just one word... "sweetheart"
            hahahhah
            so you  want me to start calling you sweet heart ?????
            hehehehhee.... i don't know why my teeth are out heehehe
            yeah.
            naye muuba
            hehehehe... suuma..... nice coding dear.
            don't worry... you will undertstand everything with time...
            even me i used to make such stupid mistakes
            now it is 7 years of coding..
            so, don't feel bad when you do mistakes... 
            it is surely part of the journey. 
            i bcome times feel like am stupid hahahaha
            hehehehee.... I know... but it is ok.
            it's now your full time job.
            c u dear.

            see you too 
            can i continue with the current videos as am fixing this news project ????

            yes... the better for you.
            alright 
            tha
            nks 
            maybe today wee will not have class.... 
            use that evening class time 
            maybe to rewatch and fix things. 
            i need you to have a very strong foundation
            though it is boring.
            ho[e you get my point]
            yeah i get you very well 
            alright suuma. cu.
            cu tho our electriciyt went so am go
            ing to a near b
            y town to charge and work from there 
            ndeeka tonkuuba nazku zooh.ahah..aha haha

            --}}
                    @csrf
                    <input type="hidden" name="new_posts_id" value="{{ $post->id }}">

                    <div>
                        <label for="body">be the first to Comment</label><br>
                        <textarea class="form-control" name="body" required></textarea>
                    </div>
                    <button class="btn btn-success mt-2" type="submit">Comment</button>
                    {{-- What a f*ck is that last link! hahahaha... i thout it
                is supupposed to be a submit button!
                heheheheeeee
                 --}}

                </form>
            </div>
        </div>
    @endauth



    <h2>Comments:</h2>
    {{-- @foreach ($post->comment as $comment)
    <div>
        <strong>{{ $comment->name }}</strong>
        <p>{{ $comment->comment }}</p>
    </div>
@endforeach --}}
@endsection
