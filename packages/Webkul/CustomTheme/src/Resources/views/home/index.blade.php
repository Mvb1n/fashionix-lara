<x-shop::layouts
    :hasFeature="false"
    :hasFooter="false"
    :hasHeader="false"
>
    <x-slot:title>
        Custom Theme Home
    </x-slot>

    <div class="container mx-auto mt-8 px-4 py-16">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-gray-800 mb-6">
                🎨 Custom Theme Package
            </h1>
            
            <p class="text-lg text-gray-600 mb-8">
                This theme is now powered by a professional package structure!
            </p>
            
            <div class="bg-blue-50 p-6 rounded-lg border border-blue-200 max-w-md mx-auto">
                <h3 class="text-xl font-semibold text-blue-800 mb-2">
                    📦 Package Benefits
                </h3>

                <p class="text-blue-600">
                    Better organization, easy distribution, and professional development workflow.
                </p>
            </div>
        </div>
    </div>
</x-shop::layouts>