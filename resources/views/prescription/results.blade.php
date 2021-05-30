@extends('layouts.app')

@section('content')
<div class="container-fluid padding-20">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('prescription.results') }} </div>

                <div class="card-body">
                    <b>{{ __('prescription.name') }}:</b> {{ $data['name'] }}<br/>
                    <b>{{ __('prescription.label.age') }}:</b> {{ $data['age'] }}<br/><br/>

                    @if($data['dengue_type'] == 1)
                        <div class="alert alert-primary" role="alert">
                            {{ __('prescription.dengue_1') }}<strong>{{ __('prescription.dengue_1_1') }}</strong>
                        </div>
                    @elseif($data['dengue_type'] == 2)
                        <div class="alert alert-secondary" role="alert">
                            {{ __('prescription.dengue_2') }}<strong>{{ __('prescription.dengue_2_2') }}</strong>
                        </div>
                    @elseif($data['dengue_type'] == 3)
                        <div class="alert alert-danger" role="alert">
                            {{ __('prescription.dengue_3') }}<strong>{{ __('prescription.dengue_3_3') }}</strong>
                        </div>
                    @endif

                    @if($data['average'] != -1)
                        <strong>{{ __('prescription.consideration') }}</strong> {{ __('prescription.info') }}<b>{{ $data['average'] }}/100</b>
                    @endif
                    <br/>

                    <hr>
                    <h4>{{ __('prescription.title') }}</h4>
                    <hr>

                    @if($data['hospitalization'] == 1)
                        @if($data['dengue_type'] == 2)
                            <p>{{ __('prescription.hospitalization2.intro') }}</p>
                            <ul class="list-group">
                                <li class="list-group-item">{{ __('prescription.hospitalization2.1') }}</li>
                                <li class="list-group-item">{{ __('prescription.hospitalization2.2') }}</li>
                                <li class="list-group-item">{{ __('prescription.hospitalization2.3') }}</li>
                                <li class="list-group-item">{{ __('prescription.hospitalization2.4') }}</li>
                                <li class="list-group-item">{{ __('prescription.hospitalization2.5') }}</li>
                                <li class="list-group-item">{{ __('prescription.hospitalization2.6') }}</li>
                                <li class="list-group-item">{{ __('prescription.hospitalization2.7') }}</li>
                                <li class="list-group-item">{{ __('prescription.hospitalization2.8') }}</li>
                            </ul><br/>
                        @elseif($data['dengue_type'] == 3)
                            <p>{{ __('prescription.hospitalization3') }}</p>
                        @endif
                    @endif

                    @if($data['crystalloid'] == 1)
                        <p>{{ __('prescription.crystalloid.1') }}</p>
                        <p>{{ __('prescription.crystalloid.2') }}</p>
                    @endif

                    @if($data['isotonic_solution'] == 1)
                        <p>{{ __('prescription.isotonic_solution.1') }}</p>
                        <p>{{ __('prescription.isotonic_solution.2') }}</p>
                        <p>{{ __('prescription.isotonic_solution.3') }}</p>
                    @endif

                    @if($data['tylenol'] == 1)
                        <p>{{ __('prescription.tylenol.1') }}</p>
                        <p>{{ __('prescription.tylenol.2') }}</p>
                    @endif

                    @if($data['drink_rehyd'] == 1)
                        <p>{{ __('prescription.drink_rehyd') }}</p>
                    @endif

                    @if($data['drink_water'] == 1)
                        <p>{{ __('prescription.drink_water') }}</p>
                    @endif

                    @if($data['dengue_type'] == 1)
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            {{ __('prescription.additional_recomendations.title') }}
                        </button>

                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                <b>{{ __('prescription.additional_recomendations.intro_1') }}</b>
                                <ul class="list-group">
                                    <li class="list-group-item">{{ __('prescription.additional_recomendations.1_1') }}</li>
                                    <li class="list-group-item">{{ __('prescription.additional_recomendations.1_2') }}</li>
                                    <li class="list-group-item">{{ __('prescription.additional_recomendations.1_3') }}</li>
                                </ul><br/>
                                <b>{{ __('prescription.additional_recomendations.intro_2') }}</b>
                                <ul class="list-group">
                                    <li class="list-group-item">{{ __('prescription.additional_recomendations.2_1') }}</li>
                                    <li class="list-group-item">{{ __('prescription.additional_recomendations.2_2') }}</li>
                                </ul><br/>
                                <b>{{ __('prescription.additional_recomendations.intro_3') }}</b>
                                <ul class="list-group">
                                    <li class="list-group-item">{{ __('prescription.additional_recomendations.3_1') }}</li>
                                </ul><br/>
                                <b>{{ __('prescription.additional_recomendations.intro_4') }}</b>
                                <ul class="list-group">
                                    <li class="list-group-item">{{ __('prescription.additional_recomendations.4_1') }}</li>
                                    <li class="list-group-item">{{ __('prescription.additional_recomendations.4_2') }}</li>
                                    <li class="list-group-item">{{ __('prescription.additional_recomendations.4_3') }}</li>
                                    <li class="list-group-item">{{ __('prescription.additional_recomendations.4_4') }}</li>
                                    <li class="list-group-item">{{ __('prescription.additional_recomendations.4_5') }}</li>
                                    <li class="list-group-item">{{ __('prescription.additional_recomendations.4_6') }}</li>
                                    <li class="list-group-item">{{ __('prescription.additional_recomendations.4_7') }}</li>
                                    <li class="list-group-item">{{ __('prescription.additional_recomendations.4_8') }}</li>
                                </ul><br/>
                                <b>{{ __('prescription.additional_recomendations.intro_5') }}</b>
                                <ul class="list-group">
                                    <li class="list-group-item">{{ __('prescription.additional_recomendations.5_1') }}</li>
                                </ul><br/>
                                <b>{{ __('prescription.additional_recomendations.intro_6') }}</b>
                                <ul class="list-group">
                                    <li class="list-group-item">{{ __('prescription.additional_recomendations.6_1') }}</li>
                                    <li class="list-group-item">{{ __('prescription.additional_recomendations.6_2') }}</li>
                                </ul><br/>
                                <b>{{ __('prescription.additional_recomendations.intro_7') }}</b><br/>
                                <b>{{ __('prescription.additional_recomendations.intro_8') }}</b>
                                <ul class="list-group">
                                    <li class="list-group-item">{{ __('prescription.additional_recomendations.8_1') }}</li>
                                    <li class="list-group-item">{{ __('prescription.additional_recomendations.8_2') }}</li>
                                    <li class="list-group-item">{{ __('prescription.additional_recomendations.8_3') }}</li>
                                    <li class="list-group-item">{{ __('prescription.additional_recomendations.8_4') }}</li>
                                    <li class="list-group-item">{{ __('prescription.additional_recomendations.8_5') }}</li>
                                    <li class="list-group-item">{{ __('prescription.additional_recomendations.8_6') }}</li>
                                    <li class="list-group-item">{{ __('prescription.additional_recomendations.8_7') }}</li>
                                    <li class="list-group-item">{{ __('prescription.additional_recomendations.8_8') }}</li>
                                </ul>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
