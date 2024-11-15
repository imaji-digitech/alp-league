<html lang="id">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script|Herr+Von+Muellerhoff' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Istok+Web|Roboto+Condensed:700' rel='stylesheet'
          type='text/css'>
    <style>
        @import 'https://fonts.googleapis.com/css?family=Roboto+Slab:400,700';

        html {
            font-size: 1rem;
        }

        body {
            background: #f0f2f2;
        }

        .bracket {
            display: inline-block;

            white-space: nowrap;
            font-size: 0;
            overflow: auto;
        }

        .bracket .round {
            display: inline-block;
            vertical-align: middle;
        }

        .bracket .round .winners > div {
            display: inline-block;
            vertical-align: middle;
        }

        .bracket .round .winners > div.matchups .matchup:last-child {
            margin-bottom: 0 !important;
        }

        .bracket .round .winners > div.matchups .matchup .participants {
            border-radius: 0.25rem;
            overflow: hidden;
        }

        .bracket .round .winners > div.matchups .matchup .participants .participant {
            box-sizing: border-box;
            color: #858585;
            border-left: 0.25rem solid #858585;
            background: white;
            width: 14rem;
            height: 3rem;
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.12);
        }

        .bracket .round .winners > div.matchups .matchup .participants .participant.winner {
            color: #60c645;
            border-color: #60c645;
        }

        .bracket .round .winners > div.matchups .matchup .participants .participant.loser {
            color: #dc563f;
            border-color: #dc563f;
        }

        .bracket .round .winners > div.matchups .matchup .participants .participant:not(:last-child) {
            border-bottom: thin solid #f0f2f2;
        }

        .bracket .round .winners > div.matchups .matchup .participants .participant span {
            margin: 0 1.25rem;
            line-height: 3;
            font-size: 1rem;
            font-family: "Roboto Slab";
        }

        .bracket .round .winners > div.connector.filled .line, .bracket .round .winners > div.connector.filled.bottom .merger:after, .bracket .round .winners > div.connector.filled.top .merger:before {
            border-color: #60c645;
        }

        .bracket .round .winners > div.connector .line, .bracket .round .winners > div.connector .merger {
            box-sizing: border-box;
            width: 2rem;
            display: inline-block;
            vertical-align: top;
        }

        .bracket .round .winners > div.connector .line {
            border-bottom: thin solid #c0c0c8;
            height: 4rem;
        }

        .bracket .round .winners > div.connector .merger {
            position: relative;
            height: 8rem;
        }

        .bracket .round .winners > div.connector .merger:before, .bracket .round .winners > div.connector .merger:after {
            content: "";
            display: block;
            box-sizing: border-box;
            width: 100%;
            height: 50%;
            border: 0 solid;
            border-color: #c0c0c8;
        }

        .bracket .round .winners > div.connector .merger:before {
            border-right-width: thin;
            border-top-width: thin;
        }

        .bracket .round .winners > div.connector .merger:after {
            border-right-width: thin;
            border-bottom-width: thin;
        }

        .bracket .round.quarterfinals .winners:not(:last-child) {
            margin-bottom: 2rem;
        }

        .bracket .round.quarterfinals .winners .matchups .matchup:not(:last-child) {
            margin-bottom: 2rem;
        }

        .bracket .round.semifinals .winners .matchups .matchup:not(:last-child) {
            margin-bottom: 10rem;
        }

        .bracket .round.semifinals .winners .connector .merger {
            height: 16rem;
        }

        .bracket .round.semifinals .winners .connector .line {
            height: 8rem;
        }

        .bracket .round.finals .winners .connector .merger {
            height: 3rem;
        }

        .bracket .round.finals .winners .connector .line {
            height: 1.5rem;
        }
    </style>
    <title>March Madness Stock Matchup</title>
</head>
<body>
<div class="bracket">
    <section class="round quarterfinals">
        <div class="winners">
            <div class="matchups">
                <div class="matchup">
                    <div class="participants">
                        <div class="participant winner"><span>Uno</span></div>
                        <div class="participant"><span>Ocho</span></div>
                    </div>
                </div>
                <div class="matchup">
                    <div class="participants">
                        <div class="participant"><span>Dos</span></div>
                        <div class="participant winner"><span>Siete</span></div>
                    </div>
                </div>
            </div>
            <div class="connector">
                <div class="merger"></div>
                <div class="line"></div>
            </div>
        </div>
        <div class="winners">
            <div class="matchups">
                <div class="matchup">
                    <div class="participants">
                        <div class="participant winner"><span>Uno</span></div>
                        <div class="participant"><span>Ocho</span></div>
                    </div>
                </div>
                <div class="matchup">
                    <div class="participants">
                        <div class="participant"><span>Dos</span></div>
                        <div class="participant winner"><span>Siete</span></div>
                    </div>
                </div>
            </div>
            <div class="connector">
                <div class="merger"></div>
                <div class="line"></div>
            </div>
        </div>
        <div class="winners">
            <div class="matchups">
                <div class="matchup">
                    <div class="participants">
                        <div class="participant winner"><span>Uno</span></div>
                        <div class="participant"><span>Ocho</span></div>
                    </div>
                </div>
                <div class="matchup">
                    <div class="participants">
                        <div class="participant"><span>Dos</span></div>
                        <div class="participant winner"><span>Siete</span></div>
                    </div>
                </div>
            </div>
            <div class="connector">
                <div class="merger"></div>
                <div class="line"></div>
            </div>
        </div>
        <div class="winners">
            <div class="matchups">
                <div class="matchup">
                    <div class="participants">
                        <div class="participant"><span>Treis</span></div>
                        <div class="participant winner"><span>Seis</span></div>
                    </div>
                </div>
                <div class="matchup">
                    <div class="participants">
                        <div class="participant"><span>Cuatro</span></div>
                        <div class="participant winner"><span>Cinco</span></div>
                    </div>
                </div>
            </div>
            <div class="connector">
                <div class="merger"></div>
                <div class="line"></div>
            </div>
        </div>
    </section>
    <section class="round semifinals">
        <div class="winners">
            <div class="matchups">
                <div class="matchup">
                    <div class="participants">
                        <div class="participant winner"><span>Uno</span></div>
                        <div class="participant"><span>Dos</span></div>
                    </div>
                </div>
                <div class="matchup">
                    <div class="participants">
                        <div class="participant winner"><span>Seis</span></div>
                        <div class="participant"><span>Cinco</span></div>
                    </div>
                </div>
            </div>
            <div class="connector">
                <div class="merger"></div>
                <div class="line"></div>
            </div>
        </div>


    </section>

    <section class="round finals">
        <div class="winners">
            <div class="matchups">
                <div class="matchup">
                    <div class="participants">
                        <div class="participant winner"><span>Uno</span></div>
                        <div class="participant"><span>Seis</span></div>
                    </div>
                </div>
            </div>
            <div class="connector">
                <div class="merger"></div>
                <div class="line"></div>
            </div>
        </div>

    </section>
    <section class="round finals">
        <div class="winners">
            <div class="matchups">
                <div class="matchup">
                    <div class="participants">
                        <div class="participant winner"><span>Uno</span></div>
{{--                        <div class="participant"><span>Seis</span></div>--}}
                    </div>
                </div>
            </div>
            <div class="connector">
                <div class="merger"></div>
                <div class="line"></div>
            </div>
        </div>

    </section>

</div>
</body>
</html>
