@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700/10  dark:text-gray-300 focus:border-indigo-500/30 dark:focus:border-indigo-600/30 dark:focus:ring-indigo-600 rounded-md shadow-sm  dark:border-gray-300/30']) !!}>
