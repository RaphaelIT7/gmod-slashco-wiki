<function name="RemoveFog" parent="SlashCo" type="libraryfunc">
	<description>
		Removes a fog entry and networks the removal to all clients.<br>
		If no matching fog entry exists, nothing is done.
	</description>
	<realm>Server</realm>
	<args>
		<arg name="name" type="string">Base name of the fog entry to remove</arg>
		<arg name="value" type="number|Entity" default="nil" optional>
			Team ID or entity used to identify a team-specific or player-specific fog entry
		</arg>
	</args>
</function>