<function name="SetupHands" parent="Player" type="classfunc">
	<description>
		Overrides the base gamemode's hands setup, which creates the `gmod_hands` entity used to render held view models.<br>
		<note>The override's body is currently commented out in the source, so it has no effect and the base gamemode's default `SetupHands` behavior is used instead.</note>
		Called automatically for Survivors when they spawn.
	</description>
	<realm>Shared</realm>
	<args>
		<arg name="spec_ply" type="Player">Player argument passed by the framework</arg>
	</args>
</function>
