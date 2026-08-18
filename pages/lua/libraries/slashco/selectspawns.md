<function name="SelectSpawns" parent="SlashCo" type="libraryfunc">
	<description>
		Selects a number of spawns from a sequential table, prioritizing forced spawn entities.<br>
		Forced entries are selected first, followed by non-forced entries if additional selections are required.
	</description>
	<realm>Server</realm>
	<args>
		<arg name="elements" type="table">Sequential table of spawn entities</arg>
		<arg name="amount" type="number">
			Number of entries to select. If unspecified, one entry is selected.
		</arg>
		<arg name="conditionsForced" type="function" default="SlashCo.DefaultConditionsForced">
			Optional condition function for forced entries
		</arg>
		<arg name="conditionsNonForced" type="function" default="SlashCo.DefaultConditionsNonForced">
			Optional condition function for non-forced entries
		</arg>
		<arg name="forceTable" type="boolean" default="false">
			If true, returns the selected entries as a table even when selecting one entry
		</arg>
	</args>
	<rets>
		<ret name="entries" type="Entity|table">Selected entity or table of selected entities</ret>
		<ret name="missed" type="number">Number of requested entries that could not be selected when applicable</ret>
	</rets>
</function>