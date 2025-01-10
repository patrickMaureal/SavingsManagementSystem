import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout'
import { Box, Heading, Input, Stack } from '@chakra-ui/react'
import { Head } from '@inertiajs/react'
import {
	DialogActionTrigger,
	DialogBody,
	DialogCloseTrigger,
	DialogContent,
	DialogFooter,
	DialogHeader,
	DialogRoot,
	DialogTitle,
	DialogTrigger,
} from "@/Components/chakra/dialog"
import { Button } from '@/Components/chakra/button'
import { Field } from '@/Components/chakra/field'

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
							<DialogRoot>
								<DialogTrigger asChild>
									<Button variant="outline" size="sm">
										Add New Goal
									</Button>
								</DialogTrigger>
								<DialogContent>
									<DialogHeader>
										<DialogTitle>Goal</DialogTitle>
									</DialogHeader>
									<DialogBody>
									<Stack gap="8" maxW="sm" css={{ "--field-label-width": "96px" }}>
										<Field orientation="horizontal" label="Name">
											<Input placeholder="John Doe" flex="1" />
										</Field>
										<Field orientation="horizontal" label="Email">
											<Input placeholder="me@example.com" flex="1" />
										</Field>
										<Field orientation="horizontal" label="Target Amount">
											<Input placeholder="100.00" flex="1" type='number' pattern='^\d*(\.\d{0,2})?$'/>
										</Field>
									</Stack>
									</DialogBody>
									<DialogFooter>
										<DialogActionTrigger asChild>
											<Button variant="outline">Cancel</Button>
										</DialogActionTrigger>
										<Button>Save</Button>
									</DialogFooter>
									<DialogCloseTrigger />
								</DialogContent>
							</DialogRoot>
						</Box>
					</Box>
				</Box>
			</Box>

		</AuthenticatedLayout>
	)
}

export default GoalDashboard