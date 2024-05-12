
<x-layout-admin>

<div class="text-gray-900 bg-gray-200">
    <div class="p-4 flex">
        <h1 class="text-3xl">Users</h1>
    </div>
    <div class="px-3 py-4 flex justify-center">
        <table class="w-full text-md bg-white shadow-md rounded mb-4">
            <tbody>
                <tr class="border-b">
                    <th class="text-left p-3 px-5">Name</th>
                    <th class="text-left p-3 px-5">Email</th>
                    <th class="text-left p-3 px-5">Role</th>
                    <th class="text-left p-3 px-5">Adress</th>
                    <th></th>
                </tr>
                @foreach($users as $user)
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5">
                        <div class="bg-transparent border-b-2 border-gray-300 py-2">{{$user['name']}}</div>
                    </td>
                    <td class="p-3 px-5">
                    <div class="bg-transparent border-b-2 border-gray-300 py-2">{{$user['email']}}</div>
                    </td>
                    <td class="p-3 px-5">
                        <div>{{$user['admin']? 'admin' : 'user'}}</div>
                    </td>
                    <td class="p-3 px-5 flexjustify-end">
                    <div class="bg-transparent border-b-2 border-gray-300 py-2">{{$user['adress']}}</div>
                    </td>       
                    <td class="p-3 px-5 flex justify-end">
                        <a href="/backOffice/user/{{$user['id']}}"><button  class=" mr-3 text-sm bg-green-500 hover:bg-green-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</button></</a>
                        <a href="/backOffice/userDelete/{{$user['id']}}"><button  class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
</x-layout-admin>