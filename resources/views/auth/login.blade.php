@extends ('layouts.header')

@section('content')

<section>
	<div class="bg-black text-white py-20">
		<div class="container mx-auto flex flex-col md:flex-row my-6 md:my-24">
			<div class="flex flex-col w-full lg:w-1/3 p-8">
				<p class="ml-6 text-yellow-300 text-lg uppercase tracking-loose">SIGNIN</p>
				<p class="text-3xl md:text-5xl my-4 leading-relaxed md:leading-snug">Sign In Today!</p>
				<p class="text-sm md:text-base leading-snug text-gray-50 text-opacity-100">
					Please provide your basic information to login your account.
				</p>
			</div>
			<div class="flex flex-col w-full lg:w-2/3 justify-center">
				<div class="container w-full px-4">
					<div class="flex flex-wrap justify-center">
						<div class="w-full lg:w-6/12 px-4">
							<div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-white">
								<div class="flex-auto p-5 lg:p-10">
									<h4 class="text-2xl mb-4 text-black font-semibold">login to Your Account.</h4>
									@if (session('status'))
										<p class="text-red-500">{{ session('status') }}</p>
									@endif
									<form id="feedbackForm" action="{{ route('login') }}" method="post" autocomplete="off">
                                        @csrf
                                        
                                        <div class="relative w-full mb-3">
											<label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="email">Email</label>
                                            <input type="email" name="email" id="email" value="{{ old('email') }}" class=" @error('email') border-red-500 @enderror px-3 py-3 rounded text-sm shadow w-full bg-gray-300 placeholder-black text-gray-800 outline-none focus:bg-gray-400" placeholder="Enter Your Email" style="transition: all 0.15s ease 0s;"/>
                                            @error('email')
                                                <span class="text-red-500 text-xs mt-2">{{ $message }}</span>
                                            @enderror
                                        </div>
										<div class="relative w-full mb-3">
											<label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="password">Password</label>
                                            <input type="password" name="password" id="password" class=" @error('password') border-red-500 @enderror px-3 py-3 rounded text-sm shadow w-full bg-gray-300 placeholder-black text-gray-800 outline-none focus:bg-gray-400" placeholder="Enter Your Password" style="transition: all 0.15s ease 0s;"/>
                                            @error('password')
                                                <span class="text-red-500 text-xs mt-2">{{ $message }}</span>
                                            @enderror
                                        </div>

										<div class="d-flex w-full mb-3">											
                                            <input type="checkbox" name="remember" id="remember" class=""/>
											<label class="uppercase text-gray-700 text-xs font-bold" for="remember">Remember Me</label>                                            
                                        </div>
                                        
											
                                        <div class="text-center mt-6">
                                            <button id="feedbackBtn" class="bg-yellow-300 text-black text-center mx-auto active:bg-yellow-400 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1" type="submit" style="transition: all 0.15s ease 0s;">Submit</button>
                                        </div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection