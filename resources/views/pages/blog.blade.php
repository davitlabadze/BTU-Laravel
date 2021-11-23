@extends('layouts.app')
@section('title', 'Blog')
@section('content')
<nav>
    <thead>
        <h1>University</h1>
        <br>
        <hr>
    </thead>
    <tbody>
        <ul>
            <li>
                <h2><a style="color:purple" href="{{ route('viewPosts',['bg' =>'purple' ,'slug' => 'bussines-and-technologies-university','body'=>'Business and Technology University was founded on September 16, 2016. BTU is the first private high – technology center in Georgia which unites regional technological hub, business accelerator, research center, artificial intelligence lab, block-chain lab, cyber security lab, retraining center, renewable energy lab, Android and iOS lab, industry 4.0 lab and other in one area.']) }}">BTU</a></h2>
            </li>
            <li>
                <h2><a style="color:red" href="{{ route('viewPosts',['bg' =>'red','slug' => 'georgian-technical-university','body' => 'The coat of arms of the Georgian Technical University is a shield, the main place in the architecture of which is occupied by a bronze eagle, a sample of Georgian engineering thinking - artistic foundry production, discovered during the second half of the 2nd century AD, discovered during the archeological excavations in Van. Above the shield stands a stylized font, the abbreviation of the Georgian Technical University "STU", which is embossed with the motto of the University of Buffett "Knowledge is power", in Latin - "Scientia potestas est". On the shield, below the eagle, is the name of the university in Georgian and Latin languages, respectively: "Georgian Technical University" and "GEORGIAE UNIVERSITAS RERUM TECHNICI". The composition concludes with the year of the University, "1922" and the olive branches as a symbol of wisdom and renewal.']) }}">GTU</a></h2>
            </li>
            <li>
                <h2><a style="color:blue" href="{{ route('viewPosts',['bg' =>'blue','slug' => 'ivane-javakhishvili-tbilisi-state-university','body' => 'The idea for the university first emerged in the early 19th century as the struggle for liberation from the Russian empire intensified. A new generation was, led by the great Georgian public figure Ilia Chavchavadze, who initiated a new stage of spiritual revival in the history of our country beginning in the 1860s. Real possibilities for establishing an institution of higher learning appeared when the Nobiliary Manorial Estate Bank was founded in Tbilisi. It was the only bank in the Russian empire, that contributed to promote the cultural, educational and economic interests of the nation.']) }}">TSU</a></h2>
            </li>
        </ul>
    </tbody>
</nav>

@endsection
