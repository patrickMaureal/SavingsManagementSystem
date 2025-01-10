import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout'
import { Box, Heading } from '@chakra-ui/react'
import { Head } from '@inertiajs/react'

const GoalDashboard = () => {
	return (
		<AuthenticatedLayout
			header={
				<Heading size="xl" fontWeight='semibold'>Goal</Heading>
			}
		>
		
		<Head title="Goal Dashboard" />
		
		<Box paddingY={12}>
			<Box marginX={'auto'} maxWidth={'7xl'} paddingX={{ sm: 6, lg: 8 }}>
				<Box overflow={'hidden'} background={'white'} boxShadow={'sm'} rounded={{ sm: 'lg' }}> 
					<Box p={6}>
						<Heading size="md" fontWeight="semibold" as="h2">Goal Dashboard</Heading>
						<p>Welcome to your goal dashboard.</p>
					</Box>
				</Box>
			</Box>
		</Box>

		</AuthenticatedLayout>
	)
}

export default GoalDashboard