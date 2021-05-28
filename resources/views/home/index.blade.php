@extends('layouts.app')

@section('content')
<div class="container-fluid padding-20">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('prescription.prescribe_patient') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('prescription.prescribe') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('prescription.label.name') }} <b class="red-asterisk">*</b></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('prescription.label.age') }} <b class="red-asterisk">*</b></label>

                            <div class="col-md-6">
                                <input id="age" type="number" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required autocomplete="age">

                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('prescription.label.symptom') }} <b class="red-asterisk">*</b></label>
                            
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="form-check col-6">
                                    <input class="form-check-input @error('fever') is-invalid @enderror" value="1" type="checkbox" value="{{ old('fever') }}" id="flexCheckDefault" name="fever" autocomplete="fever">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{ __('prescription.label.fever') }}
                                    </label>

                                    @error('fever')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="form-check col-6">
                                    <input class="form-check-input @error('headache') is-invalid @enderror" value="1" type="checkbox" value="{{ old('headache') }}" id="flexCheckDefault" name="headache" autocomplete="headache">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{ __('prescription.label.headache') }}
                                    </label>

                                    @error('headache')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="form-check col-6">
                                    <input class="form-check-input @error('ocular_pain') is-invalid @enderror" value="1" type="checkbox" value="{{ old('ocular_pain') }}" id="flexCheckDefault" name="ocular_pain" autocomplete="ocular_pain">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{ __('prescription.label.ocular_pain') }}
                                    </label>

                                    @error('ocular_pain')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="form-check col-6">
                                    <input class="form-check-input @error('myalgia') is-invalid @enderror" value="1" type="checkbox" value="{{ old('myalgia') }}" id="flexCheckDefault" name="myalgia" autocomplete="myalgia">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{ __('prescription.label.myalgia') }}
                                    </label>

                                    @error('myalgia')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="form-check col-6">
                                    <input class="form-check-input @error('arthralgia') is-invalid @enderror" value="1" type="checkbox" value="{{ old('arthralgia') }}" id="flexCheckDefault" name="arthralgia" autocomplete="arthralgia">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{ __('prescription.label.arthralgia') }}
                                    </label>

                                    @error('arthralgia')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="form-check col-6">
                                    <input class="form-check-input @error('skin_rash') is-invalid @enderror" value="1" type="checkbox" value="{{ old('skin_rash') }}" id="flexCheckDefault" name="skin_rash" autocomplete="skin_rash">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{ __('prescription.label.skin_rash') }}
                                    </label>

                                    @error('skin_rash')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="form-check col-6">
                                    <input class="form-check-input @error('abdominal_pain') is-invalid @enderror" value="1" type="checkbox" value="{{ old('abdominal_pain') }}" id="flexCheckDefault" name="abdominal_pain" autocomplete="abdominal_pain">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{ __('prescription.label.abdominal_pain') }}
                                    </label>

                                    @error('abdominal_pain')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="form-check col-6">
                                    <input class="form-check-input @error('vomiting') is-invalid @enderror" value="1" type="checkbox" value="{{ old('vomiting') }}" id="flexCheckDefault" name="vomiting" autocomplete="vomiting">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{ __('prescription.label.vomiting') }}
                                    </label>

                                    @error('vomiting')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="form-check col-6">
                                    <input class="form-check-input @error('drowsiness') is-invalid @enderror" value="1" type="checkbox" value="{{ old('drowsiness') }}" id="flexCheckDefault" name="drowsiness" autocomplete="drowsiness">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{ __('prescription.label.drowsiness') }}
                                    </label>

                                    @error('drowsiness')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="form-check col-6">
                                    <input class="form-check-input @error('hypotension') is-invalid @enderror" value="1" type="checkbox" value="{{ old('hypotension') }}" id="flexCheckDefault" name="hypotension" autocomplete="hypotension">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{ __('prescription.label.hypotension') }}
                                    </label>

                                    @error('hypotension')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="form-check col-6">
                                    <input class="form-check-input @error('hepatomegaly') is-invalid @enderror" value="1" type="checkbox" value="{{ old('hepatomegaly') }}" id="flexCheckDefault" name="hepatomegaly" autocomplete="hepatomegaly">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{ __('prescription.label.hepatomegaly') }}
                                    </label>

                                    @error('hepatomegaly')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="form-check col-6">
                                    <input class="form-check-input @error('mucosal_bleeding') is-invalid @enderror" value="1" type="checkbox" value="{{ old('mucosal_bleeding') }}" id="flexCheckDefault" name="mucosal_bleeding" autocomplete="mucosal_bleeding">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{ __('prescription.label.mucosal_bleeding') }}
                                    </label>

                                    @error('mucosal_bleeding')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="form-check col-6">
                                    <input class="form-check-input @error('hypothermia') is-invalid @enderror" value="1" type="checkbox" value="{{ old('hypothermia') }}" id="flexCheckDefault" name="hypothermia" autocomplete="hypothermia">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{ __('prescription.label.hypothermia') }}
                                    </label>

                                    @error('hypothermia')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="form-check col-6">
                                    <input class="form-check-input @error('increased_hematocrit') is-invalid @enderror" value="1" type="checkbox" value="{{ old('increased_hematocrit') }}" id="flexCheckDefault" name="increased_hematocrit" autocomplete="increased_hematocrit">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{ __('prescription.label.increased_hematocrit') }}
                                    </label>

                                    @error('increased_hematocrit')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="form-check col-6"> 
                                    <input class="form-check-input @error('low_platelet_count') is-invalid @enderror" value="1" type="checkbox" value="{{ old('low_platelet_count') }}" id="flexCheckDefault" name="low_platelet_count" autocomplete="low_platelet_count">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{ __('prescription.label.low_platelet_count') }}
                                    </label>

                                    @error('low_platelet_count')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="form-check col-6">
                                    <input class="form-check-input @error('fluid_overload') is-invalid @enderror" value="1" type="checkbox" value="{{ old('fluid_overload') }}" id="flexCheckDefault" name="fluid_overload" autocomplete="fluid_overload">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{ __('prescription.label.fluid_overload') }}
                                    </label>

                                    @error('fluid_overload')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="form-check col-6">
                                    <input class="form-check-input @error('extravasation') is-invalid @enderror" value="1" type="checkbox" value="{{ old('extravasation') }}" id="flexCheckDefault" name="extravasation" autocomplete="extravasation">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{ __('prescription.label.extravasation') }}
                                    </label>

                                    @error('extravasation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="form-check col-6">
                                    <input class="form-check-input @error('bleeding_hemothorax') is-invalid @enderror" value="1" type="checkbox" value="{{ old('bleeding_hemothorax') }}" id="flexCheckDefault" name="bleeding_hemothorax" autocomplete="bleeding_hemothorax">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{ __('prescription.label.bleeding_hemothorax') }}
                                    </label>

                                    @error('bleeding_hemothorax')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="form-check col-6">
                                    <input class="form-check-input @error('shock') is-invalid @enderror" type="checkbox" value="1" value="{{ old('shock') }}" id="flexCheckDefault" name="shock" autocomplete="shock">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{ __('prescription.label.shock') }}
                                    </label>

                                    @error('shock')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="form-check col-6">
                                    <input class="form-check-input @error('organic_damage') is-invalid @enderror" value="1" type="checkbox" value="{{ old('organic_damage') }}" id="flexCheckDefault" name="organic_damage" autocomplete="organic_damage">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{ __('prescription.label.organic_damage') }}
                                    </label>

                                    @error('organic_damage')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                       
                        <div class="form-group row mb-0">
                            <div class="col-6 offset-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('prescription.label.prescribe') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
