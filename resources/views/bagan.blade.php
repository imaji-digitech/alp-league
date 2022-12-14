@php use App\Models\MatchMaking;use App\Models\School; @endphp
<x-admin>
    <x-slot name="title">
        Dashboard
    </x-slot>
    <x-slot name="css">
        <style>
            row > .col-xs-3 {
                display: flex;
                flex: 0 0 25%;
                max-width: 25%
            }

            .flex-nowrap {
                -webkit-flex-wrap: nowrap !important;
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important;
            }

            .flex-row {
                display: flex;
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: normal !important;
                -webkit-flex-direction: row !important;
                -ms-flex-direction: row !important;
                flex-direction: row !important;
            }

            .score {
                padding: 0 10px;
                width: 20%
            }

            .school-team {
                padding: 0 10px;
                width: 80%
            }

            @media (max-width: 768px) {
                .score {
                    padding: 0 10px;
                    width: 40%
                }

                .school-team {
                    padding: 0 10px;
                    width: 60%
                }

            }
        </style>
    </x-slot>
    <div>

        <div class="container-fluid">
            <div class="row flex-row flex-nowrap">

                @for($i=0;$i<6;$i++)
                    <div class="col-2 p-1">
                        <div class="card m-1">
                            <div class="card-header bg-dark" style="padding: 10px;text-align: center">
                                Group A
                            </div>
                            <div class="card-body" style="padding: 10px;text-align: center">
                                SDN Dukuh dempok 1 <br><br>
                                SDN Dukuh dempok 1 <br><br>
                                SDN Dukuh dempok 1 <br><br>
                                SDN Dukuh dempok 1
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="row flex-row flex-nowrap">
                @for($i=0;$i<3;$i++)
                    <div class="col-4 ">
                        <div class="row m-2 bg-success rounded rounded-5">
                            <div class="col-6" style="padding:3px">
                                <div class="card m-1">
                                    <div class="card-header bg-dark" style="padding: 10px;text-align: center">
                                        Winner A
                                    </div>
                                    <div class="card-body" style="padding: 10px;text-align: center">
                                        SDN Dukuh dempok 1
                                    </div>
                                </div>
                            </div>
                            <div class="col-6" style="padding:3px">
                                <div class="card m-1">
                                    <div class="card-header bg-dark" style="padding: 10px;text-align: center">
                                        Winner A
                                    </div>
                                    <div class="card-body" style="padding: 10px;text-align: center">
                                        SDN Dukuh dempok 1
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                @endfor
            </div>
            <div class="row " style="text-align: center">
                <div class="col-1 p-1"></div>
                <div class="col-10 row bg-success">
                    <div class="col-2 p-1">
                        <div class="card">
                            <div class="card-header bg-dark" style="padding: 10px;text-align: center">
                                Finalis
                            </div>
                            <div class="card-body" style="padding: 10px;text-align: center">
                                SDN Dukuh dempok 1
                            </div>
                        </div>
                    </div>
                    <div class="col-3 p-1"></div>
                    <div class="col-2 p-1">
                        <div class="card">
                            <div class="card-header bg-dark" style="padding: 10px;text-align: center">
                                Finalis
                            </div>
                            <div class="card-body" style="padding: 10px;text-align: center">
                                SDN Dukuh dempok 1
                            </div>
                        </div>
                    </div>
                    <div class="col-3 p-1"></div>
                    <div class="col-2 p-1">
                        <div class="card">
                            <div class="card-header bg-dark" style="padding: 10px;text-align: center">
                                Finalis
                            </div>
                            <div class="card-body" style="padding: 10px;text-align: center">
                                SDN Dukuh dempok 1
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-1 p-1"></div>


            </div>
            <div class="row" style="text-align: center">
                <div class="col-5 p-1"></div>
                <div class="col-2 p-1">
                    <div class="card ">
                        <div class="card-header bg-dark" style="padding: 10px;text-align: center">
                            Winner
                        </div>
                        <div class="card-body" style="padding: 10px;text-align: center">
                            SDN Dukuh dempok 1
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-admin>
