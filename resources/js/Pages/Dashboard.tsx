import { Button } from '@/Components/chakra/button';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { HStack } from '@chakra-ui/react';
import { Head } from '@inertiajs/react';

export default function Dashboard() {
    return (
        <AuthenticatedLayout
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800">
                    Dashboard
                </h2>
            }
        >
            <Head title="Dashboard" />

            <div className="py-12">
                <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div className="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div className="p-6 text-gray-900">
													<HStack>
														<Button>Click me</Button>
														<Button>Click me</Button>
													</HStack>
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
