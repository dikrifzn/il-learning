@extends('backend.admin.master')

@section('content')
    @include('components.confirmModal' , 
        [ 
            'title' => 'Apakah anda yakin?', 
            'subtitle' => 'Data course akan mulai ditambahkan',
            'to' => 'storeCourse'
        ]
    )
    @include('components.toast')
    <span id="headerImg" class="absolute w-screen h-[400px] bg-[#5e72e4] top-0 left-0"></span>
    <section 
        class="
            py-16 
            px-5
            md:py-28 
            col-span-5 
            lg:col-span-4 
            lg:pr-[70px]
            relative
        "
    >
        <div class="flex justify-between">
            <h1 class="text-4xl font-semibold text-white flex items-center">
                <span class="bg-white p-2 rounded mr-3">
                    @include(
                        'components.icons.bookOpen-regular-icon',
                        ['class' => 'w-10 text-indigo-500']
                    )
                </span>
                Add Course
            </h1>
            {{-- <div class="bg-white">
                breadcrumbs
            </div> --}}
        </div>

        <div class="bg-white dark:bg-slate-800 col-span-6 md:col-span-4 shadow-md rounded overflow-hidden mt-10 p-5">
            <form 
                id="storeCourse" 
                action="{{ route('admin.course.store') }}" 
                method="POST" 
                enctype="multipart/form-data"
            >
                @csrf
                <div class="grid grid-cols-2 gap-5 mb-5">
                    <div>
                        <label for="name" class="block text-white font-semibold">Name :</label>
                        <input 
                            type="text" 
                            name="name" 
                            id="name" 
                            class="w-full rounded py-2 px-3 dark:bg-slate-700 dark:text-gray-100"
                        >
                    </div>
                    <div>
                        <label for="sks" class="block text-white font-semibold">SKS :</label>
                        <input 
                            type="number" 
                            name="sks" 
                            id="sks" 
                            class="w-full rounded py-2 px-3 dark:bg-slate-700 dark:text-gray-100"
                        >
                    </div>
                </div>
                <div class="mb-5">
                    <label for="file" class="block text-white font-semibold">Background :</label>
                    <input 
                        type="file" 
                        name="file" 
                        id="file" 
                        class="w-full rounded py-2 px-3 dark:bg-slate-700 dark:text-gray-100"
                    >
                </div>
                <div class="mb-5">
                    <label for="description" class="block text-white font-semibold">Description :</label>
                    <textarea 
                        name="description" 
                        id="description" 
                        class="w-full min-h-[150px] rounded max-h-[150px] px-3 py-2 dark:bg-slate-700 dark:text-gray-100"
                    ></textarea>
                </div>
                <div class="flex items-center justify-between">
                    <a 
                        href="{{ route('admin.course.index') }}" 
                        class="bg-gray-400 hover:bg-gray-300 rounded px-5 py-2 text-white"
                    >
                        Kembali
                    </a>
                    <div>
                        <button type="reset" class="bg-red-500 hover:bg-red-400 rounded px-5 py-2 text-white">
                            Reset
                        </button>
                        <button 
                            type="button"
                            onclick="toggleConfirm()"
                            class="bg-indigo-500 hover:bg-indigo-400 rounded px-5 py-2 text-white"
                        >
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

@section('script')
<script>
    const hideNoty= ()=>{
        const noty = document.getElementById('noty')
        noty.classList.toggle('flex');
        noty.classList.toggle('hidden');
    }

    const toggleConfirm = () =>{
        const cofirmModal= document.getElementById('confirmModal');
        cofirmModal.classList.toggle('hidden');
    }
</script>
@endsection