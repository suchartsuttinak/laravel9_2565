@extends('layouts.dashboard-general')



@section('content')

<h1>Users</h1>

<div class="flex flex-col mt-4">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
        <div class="overflow-hidden">
          <table class="min-w-full">
            <thead class="bg-white border-b">
              <tr>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  รหัส
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  ชื่อ-สกุล
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  อีเมล์
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  วันที่สร้าง
                </th>
              </tr>
            </thead>
            <tbody>

                @foreach ( $users as $user)
                <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{ $user->id }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{ $user->name }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{ $user->email }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{ $user->created_at }}
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
                    <div class="mt-4">
                        {{ $users->links() }}
                    </div>

        </div>
      </div>
    </div>
  </div>




@endsection
