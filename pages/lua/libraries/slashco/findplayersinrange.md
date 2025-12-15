<function name="FindPlayersInRange" parent="SlashCo" type="libraryfunc">
	<description>
		Finds all players in a given radius and checks if their visible from the origin by doing a trace.
	</description>
	<realm>Shared</realm>
	<args>
		<arg name="origin" type="Vector">The origin to check from</arg>
		<arg name="radius" type="number">The radius to check in</arg>
		<arg name="specificTeam" type="number" default="nil">
				A specific team to check for, an example would be <page>TEAM_SURVIVOR</page><br>
				Can be left out / nil to check all players.
		</arg>
		<arg name="ignoreEntity" type="Entity|table" default="nil">
			If given, this is used as the trace filter to ignore specific entities.<br>
			See Garry's Mod [Trace.filter](https://wiki.facepunch.com/gmod/Structures/Trace#filter) documentation.
		</arg>
	</args>
	<rets>
		<ret name="results" type="table">A sequential table containing all players that were found</ret>
	</rets>
</function>