<function name="RemoveObjective" parent="SlashCo" type="libraryfunc">
	<description>
		Removes the tracked objective with the given `name`.<br>
		Doesn't network the change, call <page>SlashCo.SendObjectives</page> afterwards to update clients.
	</description>
	<realm>Server</realm>
	<group>Objectives</group>
	<args>
		<arg name="name" type="string">Name of the objective to remove.</arg>
	</args>
</function>
