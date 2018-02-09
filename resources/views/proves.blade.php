@extends('layouts.app')

@section('content')
	<div class="bg-red-lightest border border-red-light ml-4 mr-4 p-4 text-red-dark rounded relative">
		<strong>Error!!</strong>
		<span>Something nasty has been happen!</span>
		<span class="absolute pin-r pin-t pin-b py-3 px-4">
            <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"/></svg>
        </span>
	</div>

	<div class="flex justify-center my-2">
		<div class="w-full max-w-md">
			<form action="#" class="bg-white shadow-md text-sm mb-4 pb-8 pt-4 px-2">
				<div>
					<label for="email" class="block text-grey-darker font-bold mb-2">Email</label>
					<input id="email" type="text" name="email" placeholder="Email here" class="shadow appearance-none rounded w-full text-grey px-1 py-1">
				</div>
				<div>
					<label for="password" class="block text-grey-darker font-bold mb-2">Password</label>
					<input id="password" type="password" name="password" placeholder="Password here" class="shadow appearance-none rounded w-full text-grey px-1 py-1">
					<p class="text-red mt-2 text-sm">*Password is required</p>
				</div>
				<button class="rounded font-bold bg-blue-dark text-white hover:bg-blue-darker px-2 py-2 shadow">Login</button>
				<a href="#" class="inline-block text-sm text-blue hover:text-blue-darker">Password oblidat</a>
			</form>
		</div>
	</div>

	<div class="flex justify-center my-2">
		<div class="w-full max-w-sm rounded shadow-lg bg-white">
			<img src="https://dummyimage.com/600x200/000/00ffd5.png" alt="Text alternatiu"class="rounded-t w-full">
			<div class="px-6 py-4">
				<div class="font-bold text-xl">Títol de la card</div>
				<p class="mt-4 text-grey-darker text-bas">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi asperiores, commodi cum distinctio hic labore obcaecati odit sint! Ab adipisci at facilis illum natus nemo odit perferendis perspiciatis ullam veniam!</p>
			</div>
			<div class="px-6 py-4">
				<span class="bg-grey-lighter rounded-full px-3 py-1 text-sm text-grey-darkest">#cool</span>
				<span class="bg-grey-lighter rounded-full px-3 py-1 text-sm text-grey-darkest">#wonderful</span>
				<span class="bg-grey-lighter rounded-full px-3 py-1 text-sm text-grey-darkest">#guau</span>
			</div>
		</div>
	</div>
@endsection