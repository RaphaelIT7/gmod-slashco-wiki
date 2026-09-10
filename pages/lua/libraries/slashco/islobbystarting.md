<function name="IsLobbyStarting" parent="SlashCo" type="libraryfunc">
	<description>
		Returns whether the lobby was marked as starting using <page>SlashCo.MarkLobbyStarting</page>.<br>
		While `true`, spectators are bound to the helicopter's camera and suicide is disallowed.
	</description>
	<realm>Shared</realm>
	<group>Lobby</group>
	<rets>
		<ret name="starting" type="boolean" default="false">Whether the lobby is starting</ret>
	</rets>
</function>