@extends('layouts.main')
@section('content')
    <div class="d-flex container py-5 mt-2 justify-content-center">
        <div class="border-0 rounded-lg w-75 shadow p-3">
            <div class="card-header bg-transparent border-0 text-center">
                <h3 class="">Caesar Cipher</h3>
            </div>
            <div class="card-body">
                <div id="app">
                    <form class="mb-4">

                        <div class="form-group">
                            <label>Your Plaintext :</label>
                            <textarea class="form-control" v-model="text.plaintext"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Your Key :</label>
                            <input type="text" class="form-control" v-model="text.key">
                        </div>
                        <button type="button" @click="halo" class="btn btn-red">Encrypt</button>
                    </form>
                    <div class="form-group">
                        <label>Result Ciphertext :</label>
                        <textarea id="ecryption" class="form-control"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
<script>
new Vue({
    el : '#app',
    data: {
       text: {},
    },
    methods: {
        halo() {
            let url = "{{ route('api.caesar.encrypt') }}";
            axios.post(url,
                this.text,
            ).then(function(data){
                $('#ecryption').val(data.data)
            })
            .catch(function(){
              console.log('FAILURE!!');
            });
        }
    },

})
</script>
@endpush
