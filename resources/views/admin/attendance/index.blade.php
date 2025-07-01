@extends('layouts.app')

@section('title', 'Data Departemen')

@section('content')
<div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
<!-- Attendance Table -->
<div class="bg-white rounded-lg shadow-sm border border-gray-200">
        <div class="px-6 py-4 border-b border-gray-200">
            <h2 class="text-xl font-semibold text-gray-900">Data Absensi Terbaru</h2>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Tanggal
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Jam Masuk
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Jam Keluar
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Keterangan
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            01 Juli 2025
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            08:00
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            17:00
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            Hadir tepat waktu
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                Hadir
                            </span>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            30 Juni 2025
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            08:15
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            17:00
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            Terlambat 15 menit
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                Terlambat
                            </span>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            29 Juni 2025
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            -
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            -
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            Izin sakit
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">
                                Izin
                            </span>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            28 Juni 2025
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            -
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            -
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            Tidak hadir tanpa keterangan
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">
                                Tidak Hadir
                            </span>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            27 Juni 2025
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            07:55
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            17:05
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            Hadir tepat waktu
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                Hadir
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection