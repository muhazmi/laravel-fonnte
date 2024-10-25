<!-- Modal Send Message -->
<div id="sendMessageModal" class="fixed inset-0 z-50 hidden bg-gray-500 bg-opacity-75">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="w-full max-w-lg p-6 bg-white rounded-lg shadow-xl">
            <h2 class="mb-4 text-lg font-semibold">Send Message</h2>

            <!-- Error message container -->
            <div id="errorContainer" class="hidden mb-4">
                <p class="font-medium text-red-500" id="errorMessage"></p>
            </div>

            <form id="sendMessageForm">
                <div class="mb-4">
                    <label for="target" class="block mb-2 font-medium">Target</label>
                    <input type="text" name="target" id="target" required
                        class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
                <div class="mb-4">
                    <label for="message" class="block mb-2 font-medium">Message</label>
                    <textarea name="message" id="message" required rows="4"
                        class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
                </div>
                <input type="hidden" name="device_token" id="deviceToken">

                <div class="flex items-center justify-end space-x-4">
                    <button type="button" class="text-red-500 hover:underline"
                        onclick="closeSendMessageModal()">Close</button>

                    <button type="submit"
                        class="flex items-center px-4 py-2 text-white bg-green-500 rounded hover:bg-green-600"
                        id="sendMessageButton">
                        <span id="buttonText">Send</span>
                        <svg id="spinner" class="hidden w-5 h-5 ml-2 text-white animate-spin"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10"
                                stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor"
                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
