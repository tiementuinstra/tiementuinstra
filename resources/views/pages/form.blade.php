@extends('cms')

@section('content')
    <div class="row">
        @if (isset($content->content))

            <div class="col mb-4">
                <div class="card shadow-2-strong">
                    <div class="card-body">
                        {{ $content->content }}
                    </div>
                </div>
            </div>

        @endif


        <div class="col mb-4">
            <div class="card shadow-2-strong">
                <div class="card-body">
                    <form>
                        <!-- Name input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="form4Example1" class="form-control" />
                            <label class="form-label" for="form4Example1">Name</label>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="form4Example2" class="form-control" />
                            <label class="form-label" for="form4Example2">Email address</label>
                        </div>

                        <!-- phone input -->
                        <div class="form-outline mb-4">
                            <input type="phone" id="form4Example2" class="form-control" />
                            <label class="form-label" for="form4Example2">Telefoonnr</label>
                        </div>

                        <!-- Message input -->
                        <div class="form-outline mb-4">
                            <textarea class="form-control" id="form4Example3" rows="4"></textarea>
                            <label class="form-label" for="form4Example3">Message</label>
                        </div>



                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4">Verstuur</button>
                    </form>


                </div>
            </div>
        </div>
    </div>

@endsection
