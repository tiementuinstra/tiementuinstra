@extends('cms')

@section('content')
    <div class="row">
        <div class="col">
            <div id="cvdescription"class="card shadow-2-strong mb-4">
                <div class="card-body">
                    <p class="card-text">
                       
                        <img src="@php
                        echo App\Traits\StrapiTrait::getImageUrl($content->name->image, 'small');
                    @endphp" alt="{{ $content->name->firstname }}{{ $content->name->lastname }}" style="height:359px;float:right;margin-left: 10px;" class="ml-3 shadow-2-strong" />
                         {{ $content->description }}

                    </p>
                </div>
            </div>

        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="card shadow-2-strong mb-4">
                <div class="card-body">
                    <table class="table card-table">
                        <tr>
                            <th>Naam</th>
                            <td>{{ $content->name->firstname }}{{ $content->name->lastname }}</td>
                        </tr>
                        <tr>
                            <th>Adres</th>
                            <td>{{ $content->name->adres }}</td>
                        </tr>
                        <tr>
                            <th>Geboren</th>
                            <td>
                                @php
                                    $ts = strtotime($content->name->birthday);
                                    $birthday = new datetime(date('d-m-Y', $ts));
                                    $now = new datetime(date('d-m-Y'));
                                    
                                    $age = $birthday->diff($now);
                                    echo $birthday->format('d M Y') . ' (' . $age->format('%Y') . ')';
                                @endphp
                            </td>
                        </tr>
                        <tr>
                            <th>Rijbewijs</th>
                            <td>{{ $content->name->drivers_license }}</td>
                        </tr>
                        <tr>
                            <th>Nationaliteit</th>
                            <td>{{ $content->name->nationality }}</td>
                        </tr>
                        <tr>
                            <th>LinkedIn</th>
                            <td><a href="{{ $content->name->linkedin }}" class="text-linkedin" target="_blank"><i class="fab fa-linkedin"></i> LinkedIn</a></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $content->name->email }}</td>
                        </tr>
                        <tr>
                            <th>Telefoon</th>
                            <td>{{ $content->name->phone }}</td>
                        </tr>
                    </table>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <h2>Werk ervaring</h2>
    <div class="row ">
        @each('components/Experience', $content->workExperience, 'experience')
    </div>
    <h2>Stage ervaring</h2>
    <div class="row">
        @each('components/Experience', $content->internExperience, 'experience')
    </div>
    <h2>Vrijwilligerswerk</h2>
    <div class="row">
        @each('components/Experience', $content->VolunteerExperience, 'experience')
    </div>
@endsection
