@extends('layouts.app1')
          
@section('content')
{{-- <div class="section1 container-fluid">
                    <div class="title1">
                        <h1>E-learning is changing organizations</h1>
                        <p> “If you continue training the same
                            way you’ve always trained, don’t expect to get better results.” — Jim Crapko"</p>
                    </div>
                    <div class="button-view-all-cont">
                        <button class="button-view-all"> View All </button>
                    </div>
</div>
<div class="container">
    <div class="gami_type_section">
        <div class="quizzes_m_sec">
            <div class=row>
                    <div class="col-md-6">
                            <p class="g_title">Quizzes</p>
                            <p>Interactive e-learning and self-assessment, with hints, instant scoring, outcomes and rewards</p>
                            <div class="q_buttn">       
                                <button>View More</button>
                            </div>
                        </div>
                    <div class="col-md-6">
                        <div>
                            <img src="https://s3.ap-southeast-1.amazonaws.com/cdn.thinklogicmarketing.com/Thinklogic/Featured+Image/2022/gamification/quiz-firstpic.png">
                        </div>
                    </div>
            </div>
        </div>
        <div class="crossword_m_sec">
                <div class="row">
                    <div class="col-md-6">
                        <img src="https://s3.ap-southeast-1.amazonaws.com/cdn.thinklogicmarketing.com/Thinklogic/Featured+Image/2022/gamification/crossword-firstpic.png">
                </div>
                    <div class="col-md-6">
                        <p class="g_title">Crossword</p>
                        <p>Clues guide you to understanding the latest concepts, buzzwords and terminologies – and rewards</p>
                        <div class="q_buttn">       
                            <button>View More</button>
                        </div>
                    </div>
                </div>
        </div>
        <div class="personality_t_m_sec">
            <div class="row">
                <div class="col-md-6">
                        <p class="g_title">Personality Test</p>
                        <p>Benefit in a fun way from extensive research, with self-testing that provides insights and outcomes for professional advancement</p>
                        <div class="q_buttn">       
                            <button>View More</button>
                        </div>
                    </div>
                <div class="col-md-6">
                        <img src="https://s3.ap-southeast-1.amazonaws.com/cdn.thinklogicmarketing.com/Thinklogic/Featured+Image/2022/gamification/personality-test-firstpic.png">
                </div>
            </div>
        </div>
     </div> 

</div>

          

<div class="data_">
    @if(count($gami_type)>1)
        @foreach($gami_type as $gami_t)

            <div>
                <p>{{$gami_t->gami_type}}</p>
            </div>
        @endforeach
    @endif
</div> --}}
<div id="app">

</div>
@vite('resources/js/app.js')
@endsection
