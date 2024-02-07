@php
    $i = 0;
@endphp

@extends('layouts.master')

@section('content')
    <div class='row'>
        <div class='col-12'>
            <div class="card">
                <div class="card-header">
                    Exam
                </div>
                <div class="card-body">
                    <div class="bg-danger p-3 m-2 border-danger text-white d-none" id="errorMessaege"></div>
                    <form id="examForm">
                        @csrf

                        @foreach ($data as $item)
                            <div class="border border-2 p-3 m-2">
                                <label class="form-label">{{ $i += 1 }}. {{ $item->question }}</label>
                                @foreach ($item->choices as $choice)
                                    <x-radio-button value="{{ $choice->weight }}" label="{{ strtoupper($choice->weight).'. '.$choice->details }}" name="{{ $i }}"></x-radio-button>
                                @endforeach
                            </div>
                        @endforeach

                        <button type="submit" class="btn btn-primary mt-3" id="btnSumbitExam">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-scripts')
<script>
    $(document).ready(function() {
        $('#examForm').submit(function(event) {
            event.preventDefault();
            $('#errorMessaege').addClass('d-none');

            $.ajax({
                url: '{{ route("exam.result") }}',
                method: 'POST',
                data: {
                    _token: $('input[name="_token"]').val(),
                    answers: getCheckedValues()
                },
                beforeSend: function () {
                    $('#btnSumbitExam').prop('disabled', true);
                },
                success: function(response) {
                    loadResult(response);
                },
                error: function(response) {
                    $('#errorMessaege').text(response.responseJSON.errors.answers[0]);
                    $('#errorMessaege').removeClass('d-none');
                },
                complete: function () {
                    $('#btnSumbitExam').prop('disabled', false);
                }
            });
        });
    });

    function getCheckedValues()
    {
        var checkedValues = [];

        $('#examForm input[type="radio"]:checked').each(function() {
            checkedValues.push($(this).val());
        });

        return checkedValues;
    }

    function loadResult(data)
    {
        $.ajax({
                url: '{{ route("result") }}',
                method: 'GET',
                data: data,
                success: function(response) {
                    $('#main-content').html(response);
                },
                error: function(xhr, status, error) {
                    console.log('Page Unavailable');
                }
            });
    }
</script>
@endsection
