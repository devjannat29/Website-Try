@extends('admin.admin_dashboard')

@section('title', 'Manage Institutional Services | ATTC')

@section('admin')
<div class="space-y-6">
    
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <h1 class="text-2xl font-bold text-white">Institutional Services</h1>
            <p class="text-slate-400 text-xs mt-1">Manage technical offerings including Trade Testing, Embassy Attestation, BMET Processing, and On-Campus Lodging.</p>
        </div>
        <a href="{{ route('admin.add_service') }}" class="px-4 py-2.5 rounded-xl bg-blue-600 hover:bg-blue-500 text-white font-semibold text-xs transition-all shadow-lg shadow-blue-500/20 flex items-center gap-1.5 self-start sm:self-auto">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
            Add New Service
        </a>
    </div>

    <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 backdrop-blur-xl overflow-hidden shadow-2xl">
        @if($services->count() > 0)
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-slate-300">
                    <thead class="text-xs uppercase bg-slate-950/70 text-slate-400 border-b border-slate-800">
                        <tr>
                            <th scope="col" class="px-4 py-3.5 rounded-l-xl">Service Name</th>
                            <th scope="col" class="px-4 py-3.5">Description</th>
                            <th scope="col" class="px-4 py-3.5">Icon Key</th>
                            <th scope="col" class="px-4 py-3.5">Status</th>
                            <th scope="col" class="px-4 py-3.5 text-right rounded-r-xl">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-800/60">
                        @foreach($services as $service)
                            <tr class="hover:bg-slate-800/40 transition-colors">
                                <td class="px-4 py-4 font-bold text-white">
                                    {{ $service->name }}
                                </td>
                                <td class="px-4 py-4 text-xs text-slate-400 max-w-md line-clamp-2">
                                    {{ $service->description }}
                                </td>
                                <td class="px-4 py-4 text-xs font-mono text-blue-400">
                                    {{ $service->icon ?? 'wrench-screwdriver' }}
                                </td>
                                <td class="px-4 py-4">
                                    <span class="px-2.5 py-1 rounded-full text-[10px] font-bold bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">
                                        {{ ucfirst($service->status ?? 'Active') }}
                                    </span>
                                </td>
                                <td class="px-4 py-4 text-right">
                                    <div class="inline-flex items-center gap-2">
                                        <a href="{{ route('admin.edit_service', $service->id) }}" 
                                           class="p-2 rounded-lg text-slate-400 hover:text-blue-400 hover:bg-slate-800 transition-colors"
                                           title="Edit Service">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                        </a>
                                        <a href="{{ route('admin.delete_service', $service->id) }}" 
                                           onclick="return confirm('Are you sure you want to delete this service?')" 
                                           class="p-2 rounded-lg text-slate-400 hover:text-rose-400 hover:bg-slate-800 transition-colors"
                                           title="Delete Service">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-6">
                {{ $services->links() }}
            </div>
        @else
            <div class="text-center py-16 text-slate-500 text-xs">
                No institutional services listed yet.
            </div>
        @endif
    </div>

</div>
@endsection
