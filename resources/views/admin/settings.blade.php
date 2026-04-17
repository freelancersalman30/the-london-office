@extends('admin.layout')

@section('title', 'Settings')
@section('header', 'Settings')

@section('content')
<div class="bg-white rounded-lg shadow-sm border border-gray-200">
    <div class="p-6 border-b border-gray-200">
        <h3 class="text-lg font-semibold text-gray-900">Admin Settings</h3>
    </div>
    <div class="p-6 space-y-6">
        <div>
            <h4 class="text-sm font-medium text-gray-700 mb-3">Account Information</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm text-gray-600 mb-1">Name</label>
                    <input type="text" value="{{ Auth::user()->name }}" class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm" disabled>
                </div>
                <div>
                    <label class="block text-sm text-gray-600 mb-1">Email</label>
                    <input type="email" value="{{ Auth::user()->email }}" class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm" disabled>
                </div>
            </div>
        </div>
        
        <div class="pt-4 border-t border-gray-200">
            <h4 class="text-sm font-medium text-gray-700 mb-3">System Information</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm text-gray-600 mb-1">Laravel Version</label>
                    <input type="text" value="{{ app()->version() }}" class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm" disabled>
                </div>
                <div>
                    <label class="block text-sm text-gray-600 mb-1">PHP Version</label>
                    <input type="text" value="{{ phpversion() }}" class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm" disabled>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection