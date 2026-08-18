<function name="SelectSpawnsNoForce" parent="SlashCo" type="libraryfunc">
	<description>
		Selects a number of spawns from a sequential table using weighted random selection.<br>
		Selected entries are removed from consideration so the same entry cannot be selected twice.<br>
		When `amount` is 1, a single element is returned unless `forceTable` is enabled.<br>
		When `amount` is greater than 1, a table of selected elements and the number of missed entries are returned.
	</description>
	<realm>Server</realm>
	<args>
		<arg name="elements" type="table<Entity>">Sequential table of spawn entities</arg>
		<arg name="amount" type="number" default="1">Number of entries to select</arg>
		<arg name="conditions" type="function" default="SlashCo.DefaultConditions">
			Optional function used to determine which entries can be selected
		</arg>
		<arg name="forceTable" type="boolean" default="false">
			If true, always returns the selected entries as a table and the number of missed entries
		</arg>
	</args>
	<rets>
		<ret name="selected" type="Entity|table<Entity>">Selected entity when `amount` is 1 and `forceTable` is false, otherwise a table of selected entities</ret>
		<ret name="missed" type="number">Number of requested entries that could not be selected when returning a table</ret>
	</rets>
</function>