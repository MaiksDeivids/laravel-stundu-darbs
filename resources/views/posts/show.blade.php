<x-app-layout>
    <h3>Current status: {{ $post->status }}</h3>

    <form method="POST" action="{{ route('posts.updateStatus', $post->id) }}">
        @csrf

        <select name="status">
            <option value="draft" {{ $post->status === 'draft' ? 'selected' : '' }}>Draft</option>
            <option value="published" {{ $post->status === 'published' ? 'selected' : '' }}>Published</option>
            <option value="archived" {{ $post->status === 'archived' ? 'selected' : '' }}>Archived</option>
        </select>

        <button type="submit">Update status</button>
    </form>
</x-app-layout>
