<div class="row w-1/2 mt-3">
    @if ($solicitud->comentarios->count() > 0)
        @foreach ($solicitud->comentarios as $c)
            <article class="flex gap-3 mt-3">
                <div class="flex justify-center items-center w-12 h-12 mx-auto">
                    <img src="{{ asset('uploads/perfiles') . '/' . $c->user_comment->img }}"
                        class="rounded-full object-cover w-12 h-12" alt="">
                </div>
                <div class="text-sm flex-1">
                    <p class="m-0 font-bold">{{ $c->user_comment->nombre }} {{ $c->user_comment->apellido }} <small
                            class="text-gray-400">{{ $c->created_at->format('d') }} {{ $c->created_at->format('M') }}
                            {{ $c->created_at->format('Y') }} - {{ $c->created_at->format('H:i') }}</small></p>
                    <p class="mb-0">
                        {{ $c->comentario }}
                    </p>
                    
                    <div class="containerRta ">
                        @if ($c->respuesta)
                            <article class="flex gap-3 mt-4">
                                <div class="flex justify-center items-center w-12 h-12">
                                    <img src="{{ asset('uploads/perfiles') . '/' . $c->user_rta->img }}"
                                        class="rounded-full object-cover w-12 h-12">
                                </div>
                                <div class="text-sm">
                                    <p class="m-0 font-bold">{{ $c->user_rta->nombre }} {{ $c->user_rta->apellido }} <small
                                        class="text-gray-400">{{ $c->updated_at->format('d') }} {{ $c->updated_at->format('M') }}
                                        {{ $c->updated_at->format('Y') }} - {{ $c->updated_at->format('H:i') }}</small></p>
                                    <p class="mb-0">
                                       {{ $c->respuesta }}
                                    </p>
                                </div>
                            </article>
                        @else
                            <div
                                class="bg-gray-200 inline-block px-2 rounded-md mt-3 cursor-pointer hover:bg-gray-300 transition-all duration-300">
                                <button class="flex gap-2 items-center rtaComment rtaComment_0">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                                    </svg>
                                    Responder
                                </button>
                            </div>
                            <form action="{{ route('comentario.update', auth()->user()->id) }}" method="POST"
                                class="mt-3 formRta_0 hidden" data-btn-rta="rtaComment_0">
                                @csrf
                                <input type="hidden" name="comentario_id" value="{{ $c->id }}">
                                <textarea name="respuesta" id="respuesta" cols="30" rows="3" class="form-control sz p-2"
                                    placeholder="Ingrese una respuesta"></textarea>
                                <div class="flex gap-3 justify-end mt-2">
                                    <button
                                        class="text-sm rounded flex items-center gap-1 px-2 py-1 hover:bg-orange-200 text-orange-400 transition-all duration-300"
                                        onclick="removeRta(this)">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6 18 18 6M6 6l12 12" />
                                        </svg>
                                        Cancelar</button>
                                    <input type="submit"
                                        class="bg-green-700 bg-opacity-60 text-white font-bold px-2 py-1 rounded-sm hover:shadow-lg transition-all duration-75"
                                        value="Responder">
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </article>
        @endforeach
    @else
        <p>No Hay comentarios</p>
    @endif
    <div class="mt-4">
        <form action="{{ route('comentario.store', auth()->user()->id) }}" method="POST">
            @csrf
            <input type="hidden" name="solicitud_id" value="{{ $solicitud->id }}">
            <label class="text-sm font-semibold">Generar Comentario</label>
            <textarea name="comentario" id="comentario" rows="2" class="form-control sz p-2" placeholder="Ingrese su comentario"></textarea>
            <div class="flex justify-end mt-2">
                <input type="submit"
                    class="text-sm w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold"
                    value="Enviar Comentario">
            </div>
        </form>
    </div>
</div>